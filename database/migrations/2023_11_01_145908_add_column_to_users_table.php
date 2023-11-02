<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if(!Schema::hasColumns('users',['phone', 'company', 'role', 'country', 'address', 'job', 'about', 'image', 'twitter', 'facebook', 'instagram', 'linkedin', 'deleted_at'])) {
                $table->string('phone', 15)->required()->after('password');
                $table->string('company', 50)->nullable()->after('phone');
                $table->integer('role')->default(2)->after('phone');
                $table->string('country', 20)->default('India')->after('company');
                $table->string('address', 100)->after('country');
                $table->string('job')->nullable()->after('address');
                $table->text('about')->nullable()->after('job');
                $table->string('image', 100)->nullable()->after('about');
                $table->string('twitter', 100)->nullable()->after('image');
                $table->string('facebook', 100)->nullable()->after('twitter');
                $table->string('instagram', 100)->nullable()->after('facebook');
                $table->string('linkedin', 100)->nullable()->after('instagram');
                $table->softDeletes()->before('created_at');
            }
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            if(Schema::hasColumns('users',['phone', 'company', 'role', 'country', 'address', 'job', 'about', 'image', 'twitter', 'facebook', 'instagram', 'linkedin', 'deleted_at'])) {
                $table->dropColumn('phone');
                $table->dropColumn('company');
                $table->dropColumn('role');
                $table->dropColumn('country');
                $table->dropColumn('address');
                $table->dropColumn('job');
                $table->dropColumn('about');
                $table->dropColumn('image');
                $table->dropColumn('twitter');
                $table->dropColumn('facebook');
                $table->dropColumn('instagram');
                $table->dropColumn('linkedin');
                $table->dropColumn('deleted_at');
            }
        });
    }
};
