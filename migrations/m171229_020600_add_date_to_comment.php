<?php

use yii\db\Migration;

/**
 * Class m171229_020600_add_date_to_comment
 */
class m171229_020600_add_date_to_comment extends Migration
{
    /*
     
    public function safeUp()
    {

    }

    
    public function safeDown()
    {
        echo "m171229_020600_add_date_to_comment cannot be reverted.\n";

        return false;
    }
*/
    
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    public function down()
    {
       $this->dropColumn('comment','date');
    }
    
}
