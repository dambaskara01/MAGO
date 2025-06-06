<?php

namespace App\Models\Reference;

use App\Models\Reference\PreferensiMahasiswaModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class InsentifModel extends Model
{
    use HasFactory;

    protected $table = 'm_insentif';
    protected $primaryKey = 'id_insentif';

    protected $fillable = [
        'keterangan',
    ];

    public function lowonganMagang(): HasOne
    {
        return $this->hasOne(LowonganMagangModel::class, 'id_insentif', 'id_insentif');
    }

    public function preferensiMahasiswa()
    {
        return $this->hasMany(PreferensiMahasiswaModel::class, 'id_insentif');
    }
}
