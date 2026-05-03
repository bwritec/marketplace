<?php

    namespace App\Database\Seeds;

    use CodeIgniter\Database\Seeder;

    class CategorieSeeder extends Seeder
    {
        public function run()
        {
            /**
             * Tecnologia
             */
            $this->db->table('categories')->insert([
                'parent' => 0,
                'name' => 'Tecnologia',
                'slogan' => 'tecnologia',
                'description' => ''
            ]);

            $parentId = $this->db->insertID();

            $this->db->table('categories')->insertBatch([
                [
                    "parent" => $parentId,
                    "name" => "Pendrive",
                    "slogan" => "pendrive",
                    "description" => ""
                ]
            ]);

            /**
             * Moda
             */
            $this->db->table('categories')->insert([
                'parent' => 0,
                'name' => 'Moda',
                'slogan' => 'moda',
                'description' => ''
            ]);

            $parentId = $this->db->insertID();

            $this->db->table('categories')->insertBatch([
                [
                    "parent" => $parentId,
                    "name" => "Íntima",
                    "slogan" => "intima",
                    "description" => ""
                ]
            ]);
        }
    }
