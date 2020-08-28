<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Owner
 * 
 * @property int $ID_OWNER
 * @property string $KODE_KOTA
 * @property string $NAMA_OWNER
 * @property string $ALAMAT_OWNER
 * @property bool $JENIS_KELAMIN_OWNER
 * @property string|null $NO_TELP_OWNER
 * @property string|null $EMAIL_OWNER
 * 
 * @property Kotum $kotum
 * @property Collection|PembayaranPenerimaanBahanBaku[] $pembayaran_penerimaan_bahan_bakus
 * @property Collection|PembayaranPenjualan[] $pembayaran_penjualans
 *
 * @package App\Models
 */
class Owner extends Model
{
	protected $table = 'owner';
	protected $primaryKey = 'ID_OWNER';
	public $timestamps = false;

	protected $casts = [
		'JENIS_KELAMIN_OWNER' => 'bool'
	];

	protected $fillable = [
		'KODE_KOTA',
		'NAMA_OWNER',
		'ALAMAT_OWNER',
		'JENIS_KELAMIN_OWNER',
		'NO_TELP_OWNER',
		'EMAIL_OWNER'
	];

	public function kotum()
	{
		return $this->belongsTo(Kotum::class, 'KODE_KOTA');
	}

	public function pembayaran_penerimaan_bahan_bakus()
	{
		return $this->hasMany(PembayaranPenerimaanBahanBaku::class, 'ID_OWNER');
	}

	public function pembayaran_penjualans()
	{
		return $this->hasMany(PembayaranPenjualan::class, 'ID_OWNER');
	}
}