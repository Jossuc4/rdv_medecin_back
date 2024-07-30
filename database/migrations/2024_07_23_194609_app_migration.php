<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        //     Schema::create('matrimoniale', function (Blueprint $table) {
        //         $table->id('id_matri');
        //         $table->string('situation');
        //     });

        //     Schema::create('fiche', function (Blueprint $table) {
        //         $table->id();
        //         $table->string('nom_patient');
        //         $table->string('prenom_patient');
        //         $table->string('sexe_patient', 1);
        //         $table->string('adresse');
        //         $table->string('phone', 13)->unique();
        //         $table->string('mail')->unique();
        //         $table->date('date_naissance');
        //         $table->unsignedBigInteger('situation');
        //         $table->foreign('situation')->references('id_matri')->on('matrimoniale')->onDelete('cascade');
        //         $table->string('groupe_sang', 3);
        //         $table->string('antecedent')->nullable(true);
        //         $table->boolean('deces')->default(false);
        //     });

        //     Schema::create('specialite', function (Blueprint $table) {
        //         $table->id('id_spec');
        //         $table->string('nom_spec');
        //     });


        Schema::create('medecin', function (Blueprint $table) {
            $table->id('id_medecin');
            $table->string('nom_medecin');
            $table->string('contact_medecin');
            $table->string('mail_medecin');
            $table->string('_mdp');
            $table->unsignedBigInteger('idspec');
            $table->foreign('idspec')->references('id_spec')->on('specialite')->onDelete('cascade');
        });

    //     Schema::create('rdvtype', function (Blueprint $table) {
    //         $table->id('id_rdv_type');
    //         $table->string('type_rdv');
    //     });

    //     Schema::create('rdv', function (Blueprint $table) {
    //         $table->id('id_rdv');
    //         $table->unsignedBigInteger('id_medecin');
    //         $table->foreign('id_medecin')->references('id_medecin')->on('medecin')->onDelete('cascade');
    //         $table->unsignedBigInteger('id_fiche');
    //         $table->foreign('id_fiche')->references('id')->on('fiche')->onDelete('cascade');
    //         $table->string('raison');
    //         $table->dateTime('date_rdv');
    //         $table->unsignedBigInteger('type_id');
    //         $table->foreign('type_id')->references('id_rdv_type')->on('rdvtype')->onDelete('cascade');
    //         $table->timestamps();
    //     });

    //     Schema::create('infos', function (Blueprint $table) {
    //         $table->id('id_info');
    //         $table->string('titre');
    //         $table->longText('contenu');
    //         $table->unsignedBigInteger('id_medecin');
    //         $table->foreign('id_medecin')->references('id_medecin')->on('medecin')->onDelete('cascade');
    //         $table->timestamps();
    //     });

    //     Schema::create('compte_patient', function (Blueprint $table) {
    //         $table->id('id_cpatient');
    //         $table->unsignedBigInteger('id_fiche')->unique();
    //         $table->foreign('id_fiche')->references('id')->on('fiche')->onDelete('cascade');
    //         $table->string('mdp');
    //     });

    //     Schema::create('compte_medecin', function (Blueprint $table) {
    //         $table->id('id_cmedecin');
    //         $table->unsignedBigInteger('id_medecin')->unique();
    //         $table->foreign('id_medecin')->references('id_medecin')->on('medecin')->onDelete('cascade');
    //         $table->string('mdp');
    //     });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matrimoniale');
        Schema::dropIfExists('fiche');
        Schema::dropIfExists('specialite');
        Schema::dropIfExists('medecin');
        Schema::dropIfExists('rdvtype');
        Schema::dropIfExists('rdv');
        Schema::dropIfExists('info');
        Schema::dropIfExists('compte_patient');
        Schema::dropIfExists('compte_medecin');
    }
};
