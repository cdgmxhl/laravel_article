<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration
{
    public function up(){
        Schema::create('article', function (Blueprint $table) {
            $table->increments('id');  #数据库自增id
            $table->string('title',33)->nullable()->default('')->comment('标题')->index(); 
            $table->text('content');
            $table->integer('user_id');
            $table->timestamps();      #添加 created_at 和 updated_at 列
            $table->softDeletes();     #创建deleted_at列,用于软删除
        });
    }
    public function down(){
        Schema::drop('product');  
    }
}
