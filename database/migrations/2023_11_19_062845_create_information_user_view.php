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
        #Vista que muestra la información del usuario junto con los detalles de su perfil
        DB::statement("CREATE VIEW information_user_view 
        AS SELECT u.id, u.username, ui.name, ui.lastname, p.profile, p.description
        FROM users u
        JOIN userinfo ui ON u.id = ui.id
        JOIN profiles p ON u.profile = p.id");
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    }
};
