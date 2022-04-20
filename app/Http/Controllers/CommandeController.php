<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Commande;
use App\Models\Product;
use App\Models\ProductCommande;
use Illuminate\Support\Str;

class CommandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $commandes = Commande ::all();
        return view('commande.index',['commandes'=>$commandes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product :: all();
        return view ('commande.create',['products'=>$products]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $commande = new Commande();
        $commande->status = "PENDING";  // ??
        $commande->reference = Str::random(10);
        $commande->save();

        $productsIds = $request->input('product');
        $commande->products()->attach($productsIds);

        return redirect ('commande');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $commandes = Commande ::where('id',$id)->get();
        
        $products_commande = ProductCommande::where('commande_id',$id)->get();
        $products = Product::all();

        return view('commande.show',['commandes'=>$commandes,'products_commande'=>$products_commande,'products'=>$products ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request,$id)
    {
        $commande=Commande::findOrFail($id);

        $product_commandes = ProductCommande::where('commande_id',$id);
        $product_commandes->delete();

        $commande->delete();

        $request->session()->flash('status','task delete was succesful!');
        
        return redirect('commandes');
    }
}
