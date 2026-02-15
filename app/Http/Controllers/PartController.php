<?php

namespace App\Http\Controllers;

use App\Http\Requests\PartRequest;
use App\Models\Part;
use App\Services\CarService;
use App\Services\PartService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Inertia\Inertia;

class PartController extends Controller
{
    public function index(Request $request, CarService $carService)
    {
        $parts = Part::with('car')
            ->nameLike($request->query('name'))
            ->serialNumberLike($request->query('serial_number'))
            ->forCar($request->query('car_id'))
            ->get();

        $cars = $carService->getAll();

        return Inertia::render('Parts', [
            'parts' => $parts,
            'cars' => $cars,
            'filters' => $request->only('name', 'serial_number', 'car_id'),
        ]);
    }

    public function create(CarService $carService)
    {
        $cars = $carService->getAll();
        return Inertia::render('Parts/Create', ['cars' => $cars]);
    }

    public function store(PartRequest $request, PartService $partService)
    {   
        try{
            $partService->create($request->validated());

            return redirect() 
            ->route('parts')
            ->with('success', 'Part created successfully');

        } catch( \Throwable $e){

            Log::error($e);

            return redirect()
            ->back()
            ->withInput()
            ->with('error', 'Part was not created.');
        }

    }

    public function show(Part $part)
    {
        return redirect()->route('parts.edit', $part);
    }

    public function edit(Part $part, CarService $carService)
    {
        $cars = $carService->getAll();
        return Inertia::render('Parts/Create', ['part' => $part, 'cars' => $cars]);
    }

    public function update(PartRequest $request, Part $part, PartService $partService)
    {
        try {
            $partService->update($part, $request->validated());

            return redirect()
                ->route('parts')
                ->with('success', 'Part was successfully updated');
        } catch (\Throwable $e) {
            Log::error($e);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Part was not updated');
        }
    }

    public function destroy(Part $part, PartService $partService)
    {
        try {
            $partService->delete($part);

            return redirect()
            ->route('parts')
            ->with('success', 'Part was deleted');

        } catch (\Throwable $e){
            Log::error($e);

            return redirect()
            ->back()
            ->with('error', 'Part was not deleted');
        }
        
    }
}
