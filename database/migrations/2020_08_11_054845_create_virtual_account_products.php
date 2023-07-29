<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use RZP\Constants\Table;
use RZP\Models\VirtualAccountProducts\Entity;

class CreateVirtualAccountProducts extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create(Table::VIRTUAL_ACCOUNT_PRODUCTS, function(Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->char(Entity::ID, Entity::ID_LENGTH)
                  ->primary();

            $table->char(Entity::VIRTUAL_ACCOUNT_ID, Entity::ID_LENGTH)
                  ->nullable(false);

            $table->string(Entity::ENTITY_TYPE, 40)
                  ->nullable(false);

            $table->char(Entity::ENTITY_ID, Entity::ID_LENGTH)
                  ->nullable(false);

            $table->integer(Entity::CREATED_AT);
            $table->integer(Entity::UPDATED_AT);

            $table->index(Entity::VIRTUAL_ACCOUNT_ID);
            $table->index(Entity::ENTITY_ID);
            $table->index(Entity::CREATED_AT);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists(Table::VIRTUAL_ACCOUNT_PRODUCTS);
    }
}
