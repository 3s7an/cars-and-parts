<?php

namespace App\Http\Controllers;

use App\Http\Requests\CarRequest;
use App\Models\Car;
use App\Services\CarService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class CarController extends Controller
{
    public function index(Request $request)
    {
        $cars = Car::with('parts')
            ->nameLike($request->query('name'))
            ->isRegistered($request->query('is_registered'))
            ->registrationNumberLike($request->query('registration_number'))
            ->get();

        return Inertia::render('Cars', [
            'cars' => $cars,
            'filters' => $request->only('name', 'is_registered', 'registration_number'),
        ]);
    }

    public function create()
    {
        return Inertia::render('Cars/Create');
    }

    public function store(CarRequest $request, CarService $carService)
    {   
        try {

            $carService->create($request->validated());

            return redirect() 
            ->route('cars')
            ->with('success', 'Car created successfully');

        } catch(\Throwable $e){
            Log::error($e); 

            return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Car was not created');

        }
    }

    public function show(Car $car)
    {
        return redirect()->route('cars.edit', $car);
    }

    public function edit(Car $car)
    {
        return Inertia::render('Cars/Create', ['car' => $car]);
    }

    public function update(CarRequest $request, Car $car, CarService $carService)
    {
        try {
            $carService->update($car, $request->validated());

            return redirect()
                ->route('cars')
                ->with('success', 'Car was successfully updated');
        } catch (\Throwable $e) {
            Log::error($e);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Car was not updated');
        }
    }

    public function destroy(Car $car, CarService $carService)
    {   
        try{
            $carService->delete($car);

            return redirect()
            ->route('cars')
            ->with('success', 'Car was successfully deleted');

        } catch (\Throwable $e){

            Log::error($e);
            return redirect()
            ->back()
            ->with('error', 'Car was not deleted');
        }
    }
}
