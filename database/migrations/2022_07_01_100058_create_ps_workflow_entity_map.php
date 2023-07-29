<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

use RZP\Models\Workflow\Service\EntityMap\Entity as WorkflowEntityMap;

class CreatePsWorkflowEntityMap extends Migration
{
    /**
     * This table doesn't exist on prod. It only exists on CI.
     * This is only to run test cases related to data migration of Payouts.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ps_workflow_entity_map', function (Blueprint $table)
        {
            $table->engine = 'InnoDB';

            $table->char(WorkflowEntityMap::ID, WorkflowEntityMap::ID_LENGTH)
                  ->primary();

            $table->char(WorkflowEntityMap::WORKFLOW_ID, WorkflowEntityMap::ID_LENGTH);

            $table->char(WorkflowEntityMap::CONFIG_ID, WorkflowEntityMap::ID_LENGTH);

            $table->char(WorkflowEntityMap::ENTITY_ID, WorkflowEntityMap::ID_LENGTH);

            $table->string(WorkflowEntityMap::ENTITY_TYPE, 255);

            $table->char(WorkflowEntityMap::MERCHANT_ID, WorkflowEntityMap::ID_LENGTH);

            $table->char(WorkflowEntityMap::ORG_ID, WorkflowEntityMap::ID_LENGTH)->nullable();

            $table->integer(WorkflowEntityMap::CREATED_AT);

            $table->integer(WorkflowEntityMap::UPDATED_AT);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ps_workflow_entity_map');
    }
}
