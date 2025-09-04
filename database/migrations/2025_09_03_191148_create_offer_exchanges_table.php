<?php

use App\Enums\ExchageStatus;
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
        Schema::create('offer_exchanges', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete();
            $table->foreignId('counterparty_id')->constrained('users')->cascadeOnDelete();

            $table->foreignId('give_skill_id')->constrained('skills')->cascadeOnDelete();
            $table->foreignId('take_skill_id')->constrained('skills')->cascadeOnDelete();

            $table->string('status')->default(ExchageStatus::ACTIVE->value)->index();
            $table->foreignId('offer_id')->nullable()->constrained('offers')->nullOnDelete();
            $table->timestamps();

            $table->unique(
                ['user_id', 'counterparty_id', 'give_skill_id', 'take_skill_id', 'offer_id'], 'exchanges_unq'
            );
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_exchanges');
    }
};
