<?php
class Model extends Database
{
    public function iud($query, $paraArr)
    {
        $this->setConnection();
        $stmt = $this->connection->prepare($query);
        $paramTypes = str_repeat('s', count($paraArr));
        if (!empty($paraArr)) {
            $stmt->bind_param($paramTypes, ...$paraArr);
        }
        $stmt->execute();
    }
    public function search($query, $paraArr)
    {
        $this->setConnection();
        $stmt = $this->connection->prepare($query);
        $paramTypes = str_repeat('s', count($paraArr));
        if (!empty($paraArr)) {
            $stmt->bind_param($paramTypes, ...$paraArr);
        }
        $stmt->execute();
        $result = $stmt->get_result();
        return $result;
    }
}
