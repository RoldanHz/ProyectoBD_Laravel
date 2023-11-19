<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        #Vista de apartamentos con información de sus arrendatarios
        DB::statement("CREATE VIEW apartments_info_view 
        AS SELECT a.id, a.rooms, a.bathrooms, a.floor_p, a.tenant, u.username
        FROM apartments a
        JOIN users u ON a.tenant = u.id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
