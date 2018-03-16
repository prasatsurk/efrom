<?php

use yii\db\Schema;
use yii\db\Migration;

/**
 * Handles the creation of table `post`.
 */
class m180312_142018_create_post_table extends Migration
{
  
    public function Up()
    {
        $this->createTable('post', [
            'id' => 'pk',
            'title' => Schema::TYPE_STRING.' NOT NULL',
            'content' => Schema::TYPE_TEXT,
        ]);
    }

  
    public function Down()
    {
        $this->dropTable('post');
    }
}
