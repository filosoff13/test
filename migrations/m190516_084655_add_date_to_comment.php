<?php

use yii\db\Migration;

/**
 * Class m190516_084655_add_date_to_comment
 */
class m190516_084655_add_date_to_comment extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function up()
    {
        $this->addColumn('comment','date', $this->date());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m190516_084655_add_date_to_comment cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m190516_084655_add_date_to_comment cannot be reverted.\n";

        return false;
    }
    */
}
