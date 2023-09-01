<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Etudiant;

class EtudiantController extends Controller
{
    public function liste_etudiant(){
        $etudiants = Etudiant::all();
        return view('etudiant.liste', compact('etudiants'));
    }
    public function ajout_etudiant(){
        
        return view('etudiant.ajouter');
    }

    public function ajout_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',

        ]);
        $etudiant = new Etudiant();
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        // $etudiant->save();
        try {
            $etudiant->save();
        } catch (\Exception $e) {
            // Affichez l'erreur pour le débogage
            dd($e->getMessage());
        }
        return redirect("/ajouter")->with('status', 'l\'etudiant est enrigistre avec succes');
    }

    public function update_etudiant($id){
        $etudiants = Etudiant::find($id);
        return view('etudiant.update', compact('etudiants'));
    }

    public function update_etudiant_traitement(Request $request)
    {
        $request->validate([
            'nom'=>'required',
            'prenom'=>'required',
            'classe'=>'required',

        ]);
        $etudiant = Etudiant::find($request->id);
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->classe = $request->classe;
        $etudiant->update();
        
        return redirect("/etudiant")->with('status', 'l\'etudiant est modifie avec succes');

    }

    public function delete_etudiant($id)
    {
        $etudiant = Etudiant::find($id);
        $etudiant->delete($id);
       
        return redirect("/etudiant")->with('status', 'l\'etudiant a ete bien supprime avec succes');

    }
   

}
