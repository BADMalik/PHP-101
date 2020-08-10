<?php

 class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }
    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    public function insert($table,$parameters)
    {
        $query= sprintf('insert into %s (%s) values (%s)',
        $table,
        implode(', ',array_keys($parameters)),
        ':'.implode(', :',array_keys($parameters)));
        try 
        {
            $statement = $this->pdo->prepare($query);
            $statement->execute($parameters);
            header('Location:/');
                
        } catch (PDOException $e) 
        {
            return $e->getMessage();    
        }
    }

}