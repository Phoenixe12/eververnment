<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidature extends Model
{
    use HasFactory;
    protected $fillable =[
        'nomCand',
        'prenomsCand',
        'nomPays_id',
        'email',
        'telephone',
        'status',
        'exp_years',
        'curriculum',
        'nomActivite_id',
        'nomEtude_id',
        'nomDiplome_id',
    ];

    public function DiplomeCand(){
        return $this->belongsTo(Diplome::class,'nomDiplome_id','id');
    }

    public function DomaineActivite(){
        return $this->belongsTo(Activite::class,'nomActivite_id','id');
    }
    public function DomaineEtude(){
        return $this->belongsTo(Etude::class,'nomEtude_id','id');
    }
    public function Pays(){
        return $this->belongsTo(Pays::class,'nomPays_id','id');
    }
}
