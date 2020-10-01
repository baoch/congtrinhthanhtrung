<?php namespace Linkonoid\DesktopBuilder\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateLinkonoidDesktopbuilderEmployee2 extends Migration
{
    public function up()
    {
        Schema::table('linkonoid_desktopbuilder_employee', function($table)
        {
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
            $table->dropColumn('deleted_at');
        });
    }
    
    public function down()
    {
        Schema::table('linkonoid_desktopbuilder_employee', function($table)
        {
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
}
