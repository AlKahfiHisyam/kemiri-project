<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PenerimaanBahanBaku
 * 
 * @property int $ID_PENERIMAAN
 * @property int $ID_SUPPLIER
 * @property int $KODE_BAHAN_BAKU
 * @property int $ID_ADMIN_GUDANG
 * @property Carbon $TGL_KEDATANGAN
 * @property string $SATUAN
 * @property float $TOTAL_BERAT
 * @property float $STOK_BAHAN_BAKU
 * @property float $JUMLAH_KARUNG_SAK
 * @property float $ISI_KARUNG
 * 
 * @property AdminGudang $admin_gudang
 * @property Supplier $supplier
 * @property BahanBaku $bahan_baku
 * @property Collection|PembayaranPenerimaanBahanBaku[] $pembayaran_penerimaan_bahan_bakus
 * @property Collection|PengambilanBahanBaku[] $pengambilan_bahan_bakus
 *
 * @package App\Models
 */
class PenerimaanBahanBaku extends Model
{
	protected $table = 'penerimaan_bahan_baku';
	protected $primaryKey = 'ID_PENERIMAAN';
	public $timestamps = false;

	protected $casts = [
		'ID_SUPPLIER' => 'int',
		'KODE_BAHAN_BAKU' => 'int',
		'ID_ADMIN_GUDANG' => 'int',
		'TOTAL_BERAT' => 'float',
		'JUMLAH_KARUNG_SAK' => 'float',
		'ISI_KARUNG' => 'float'
	];

	protected $dates = [
		'TGL_KEDATANGAN'
	];

	protected $fillable = [
		'ID_SUPPLIER',
		'KODE_BAHAN_BAKU',
		'ID_ADMIN_GUDANG',
		'TGL_KEDATANGAN',
		'SATUAN',
		'TOTAL_BERAT',
		'STOK_BAHAN_BAKU',
		'JUMLAH_KARUNG_SAK',
		'ISI_KARUNG'
	];

	public function admin_gudang()
	{
		return $this->belongsTo(AdminGudang::class, 'ID_ADMIN_GUDANG');
	}

	public function supplier()
	{
		return $this->belongsTo(Supplier::class, 'ID_SUPPLIER');
	}

	public function bahan_baku()
	{
		return $this->belongsTo(BahanBaku::class, 'KODE_BAHAN_BAKU');
	}

	public function pembayaran_penerimaan_bahan_bakus()
	{
		return $this->hasMany(PembayaranPenerimaanBahanBaku::class, 'ID_PENERIMAAN');
	}

	public function pengambilan_bahan_bakus()
	{
		return $this->hasMany(PengambilanBahanBaku::class, 'ID_PENERIMAAN');
	}
}
