<?php

namespace App\Models;

use Pimple\Container;

class User
{
    private $db, $events;
    
    public function __construct(Container $container)
    {
        $this->db = $container['db'];
        $this->events = $container['events'];
    }
    public function get(int $id)
    {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE id=?');
        $stmt->execute([$id]);

        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function create(array $data)
    {
        $this->events->trigger('creating.users', null, $data);
        // inserir no banco de dados
        $this->events->trigger('created.users', null, $data);
    }
}