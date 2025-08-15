<?php

use App\Models\Ttpb;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

uses(RefreshDatabase::class);

test('mixing barang jadi shows aggregated items', function () {
    $user = User::factory()->create(['role' => 'mixing']);
    $this->actingAs($user);

    Ttpb::factory()->create([
        'nama_barang' => 'Produk A',
        'qty_aktual' => 5,
        'ke' => 'mixing',
    ]);

    Ttpb::factory()->create([
        'nama_barang' => 'Produk A',
        'qty_aktual' => 7,
        'ke' => 'mixing',
    ]);

    Ttpb::factory()->create([
        'nama_barang' => 'Produk B',
        'qty_aktual' => 3,
        'ke' => 'mixing',
    ]);

    $response = $this->get('/mixing/barang-jadi');

    $response->assertOk();
    $response->assertSee('Produk A');
    $response->assertSee('12');
    $response->assertSee('Produk B');
    $response->assertSee('3');
});
