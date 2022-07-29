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
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('price');
            $table->string('source')->nullable()->default('Chưa có hình ảnh');
            $table->string('creator');
            $table->string('project_type')->nullable()->default('Không xác định');
            $table->text('project_description')->nullable()->default('Chưa có mô tả');
            $table->string('project_address')->nullable()->default('Chưa thêm địa chỉ');
            $table->string('project_acreage')->nullable()->default('Chưa có diện tích');
            $table->string('project_tip')->nullable()->default('Không có hoa hồng');
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
        Schema::dropIfExists('projects');
    }
};
