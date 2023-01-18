<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = Customer::latest()->get();

        return view('admin.customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fileName = str_replace(' ', '_', strtolower($request->nama)) . '.' . $request->file('logo')->extension();
        $request->file('logo')->storeAs('public/logo', $fileName);

        $logo = 'storage/logo/' . $fileName;

        Customer::create([
            'nama_perusahaan' => $request->nama,
            'logo' => $logo,
        ]);

        return redirect()->route('customer.index')->with('success', 'Berhasil Tambah Data Klien Perusahaan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        return view('admin.customers.edit', compact('customer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        $customer->update([
            'nama_perusahaan' => $request->nama,
        ]);

        if ($request->file('logo')) {
            $fileName = str_replace(' ', '_', strtolower($request->name)) . '.' . $request->file('logo')->extension();
            $request->file('logo')->storeAs('public/logo', $fileName);

            $logo = 'storage/logo/' . $fileName;

            $customer->update([
                'logo' => $logo,
            ]);
        }

        return redirect()->route('customer.index')->with('success', 'Berhasil Ubah Data Klien Perusahaan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        $customer->delete();

        return redirect()->route('customer.index')->with('success', 'Berhasil Hapus Data Klien Perusahaan');
    }
}
