<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('firstName');
            $table->string('middleName');
            $table->string('lName');
            $table->string('docAdmit');
            $table->string('abrasionCh')->nullable();
            $table->string('rdoAid')->nullable();
            $table->string('avulsionCh')->nullable();
            $table->string('burnCh')->nullable();
            $table->string('burn1Ch')->nullable();
            $table->string('concussionCh')->nullable();
            $table->string('contusionCh')->nullable();
            $table->string('fractureCh')->nullable();
            $table->string('openTypeCh')->nullable();
            $table->string('closedTypeCh')->nullable();
            $table->string('woundCh')->nullable();
            $table->string('traumaCh')->nullable();
            $table->string('others1Ch')->nullable();
            $table->string('bitesCh')->nullable();
            $table->string('chemicalCh')->nullable();
            $table->string('sharpCh')->nullable();
            $table->string('drowningCh')->nullable();
            $table->string('others5Ch')->nullable();
            $table->string('natureCh')->nullable();
            $table->string('gunshotCh')->nullable();
            $table->string('hangingCh')->nullable();
            $table->string('maulingCh')->nullable();
            $table->string('transportCh')->nullable();
            $table->string('fallCh')->nullable();
            $table->string('firecrackerCh')->nullable();
            $table->string('assaultCh')->nullable();
            $table->string('noneCh')->nullable();
            $table->string('airbagCh')->nullable();
            $table->string('helmetCh')->nullable();
            $table->string('childseatCh')->nullable();
            $table->string('seatbeltCh')->nullable();
            $table->string('unknown5Ch')->nullable();
            $table->string('vestCh')->nullable();
            $table->string('phoneCh')->nullable();
            $table->string('sleepyCh')->nullable();
            $table->string('alcoholCh')->nullable();
            $table->string('smokingCh')->nullable();
            $table->string('drugsCh')->nullable();
            $table->string('others11Ch')->nullable();
            $table->string('others12Ch')->nullable();
            $table->string('injryRdo')->nullable();
            $table->string('transferRdo')->nullable();
            $table->string('referral')->nullable();
            $table->string('degreeRdoBtn')->nullable();
            $table->string('status')->nullable();
            $table->string('arrival')->nullable();
            $table->string('transpoRdo')->nullable();
            $table->string('transpoRdo1')->nullable();
            $table->string('outcome')->nullable();
            $table->string('drowningRdo')->nullable();
            $table->string('burnRdo')->nullable();
            $table->string('natureRdo')->nullable();
            $table->string('victimsRdo')->nullable();
            $table->string('workplaceInput')->nullable();
            $table->string('abrasion')->nullable();
            $table->string('avulsion')->nullable();
            $table->string('site')->nullable();
            $table->string('concussion')->nullable();
            $table->string('contusion')->nullable();
            $table->string('openType')->nullable();
            $table->string('closedType')->nullable();
            $table->string('wound')->nullable();
            $table->string('traumaticAmputation')->nullable();
            $table->string('others1')->nullable();
            $table->string('bites')->nullable();
            $table->string('others2')->nullable();
            $table->string('chemical')->nullable();
            $table->string('sharp')->nullable();
            $table->string('others3')->nullable();
            $table->string('others4')->nullable();
            $table->string('gunshot')->nullable();
            $table->string('fall')->nullable();
            $table->string('firecracker')->nullable();
            $table->string('others5')->nullable();
            $table->string('others6')->nullable();
            $table->string('others7')->nullable();
            $table->string('others8')->nullable();
            $table->string('withothers')->nullable();
            $table->string('others9')->nullable();
            $table->string('others10')->nullable();
            $table->string('others11')->nullable();
            $table->string('hospPhys')->nullable();
            $table->string('impression')->nullable();
            $table->string('others12')->nullable();
            $table->string('others13')->nullable();
            $table->string('icdNature')->nullable();
            $table->string('icdExternal')->nullable();
            $table->string('treatment')->nullable();
            $table->string('treatment1')->nullable();
            $table->string('collRdo')->nullable();
            $table->string('transferred')->nullable();
            $table->string('dispoRdo')->nullable();
            $table->string('severity')->nullable();
            $table->string('vehicleRdo')->nullable();
            $table->string('posRdo')->nullable();
            $table->string('placeRdo')->nullable();
            $table->string('otherRdo')->nullable();
            $table->string('activityRdo')->nullable();
            $table->longtext('frstAid')->nullable();
            $table->string('natureOfInjury')->nullable();//checkboxes
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('patients');
    }
}
