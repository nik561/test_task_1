<?php


abstract class Animal
{
    protected $id = NULL;
    protected $count_for_once = 0;
    protected $collect_time;
    protected $ending;
    protected $collect_type;

    public final function setId(int $id)
    {
        if (!is_null($this->id)) {
            throw new Exception('You can\'t reset ID');
        }
        $this->id = $id;
    }

    public function collect()
    {
        $this->collect_time = time();
        return array('type' => $this->collect_type, 'count' => $this->count_for_once, 'animal_id' => $this->id, 'ending' => $this->ending);
    }
}