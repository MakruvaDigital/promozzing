<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class History extends Migration
{
    public function up()
    {
        // Quote History
		$this->forge->addField([
			'id'		    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,  'auto_increment' => true ],
			'uid'	 	    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true ],
			'text'      => [ 'type' => 'TEXT' ],
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('uid','users','id','CASCADE','RESTRICT');
		$this->forge->createTable('quotes');

        // Generated Quote Counts
		$this->forge->addField([
			'id'		    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,  'auto_increment' => true ],
			'uid'	 	    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true ],
			'counts'        => [ 'type' => 'INT', 'constraint' => 13, 'unsigned' => true, 'default' => 0]
		]);
        $this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('uid','users','id','CASCADE','RESTRICT');
		$this->forge->createTable('generated_quotes_counts');

        // Headline History
		$this->forge->addField([
			'id'		    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,  'auto_increment' => true ],
			'uid'	 	    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true ],
      'type'          => [ 'type' => 'VARCHAR', 'constraint' => 33 ],
			'text'          => [ 'type' => 'TEXT' ],
			'created_at'=> [ 'type' => 'datetime' ]
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('uid','users','id','CASCADE','RESTRICT');
		$this->forge->createTable('headlines');

        // Generated Headline Counts
		$this->forge->addField([
			'id'		     => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,  'auto_increment' => true ],
			'uid'	 	     => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true ],
			'critical_issue' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'time_period'    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'barriers'       => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'figure'         => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'other'          => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ]
		]);
    $this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('uid','users','id','CASCADE','RESTRICT');
		$this->forge->createTable('copied_headlines_counts');

        // Copywriting History
		$this->forge->addField([
			'id'		    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,  'auto_increment' => true ],
			'uid'	 	    => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true ],
			'text'          => [ 'type' => 'TEXT' ],
      'created_at'    => [ 'type' => 'datetime' ],
		]);
		$this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('uid','users','id','CASCADE','RESTRICT');
		$this->forge->createTable('copywritings');

        // Generated Headline Counts
		$this->forge->addField([
			'id'		   => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true,  'auto_increment' => true ],
			'uid'	 	   => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true ],
			'copywriting1' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'copywriting2' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'copywriting3' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'copywriting4' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			'copywriting5' => [ 'type' => 'INT', 'constraint' => 11, 'unsigned' => true, 'default' => 0 ],
			
		]);
    $this->forge->addPrimaryKey('id', true);
		$this->forge->addForeignKey('uid','users','id','CASCADE','RESTRICT');
		$this->forge->createTable('copied_copywritings_counts');
    }

    public function down()
    {
      $this->forge->dropTable('quotes');
			$this->forge->dropTable('generated_quotes_counts');
			$this->forge->dropTable('headlines');
			$this->forge->dropTable('copied_headlines_counts');
			$this->forge->dropTable('copywritings');
			$this->forge->dropTable('copied_copywritings_counts');
    }
}
