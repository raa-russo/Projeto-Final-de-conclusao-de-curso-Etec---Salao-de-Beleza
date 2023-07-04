<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\TipoUsuario;
use App\Models\Servico;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table = "usuarios";
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nome',
        'cpf',
        'cnpj',
        'sexo',
        'cnpj',
        'endereco',
        'servico_id',
        'email',
        'senha',
        'tipo_usuario_id',
        'servico_id',
    ];
    public function tipoUsuario(): HasOne
    {
        return $this->hasOne(TipoUsuario::class);
    }

    public function servico(): HasOne
    {
        return $this->hasOne(Servico::class, 'servico_id');
    }

}
