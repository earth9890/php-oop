<?php

interface Jsonable
{
    public function toJson();
}

class User implements Jsonable
{

    public function toJson()
    {

    }

}


class Collection implements Jsonable{
    public function toJson()
    {

    }
}


interface Repository{
    public function save($data);
}

class MongoRepository implements Repository{
    public function save($data)
    {

    }
}

class FileRepository implements Repository{
    public function save($data)
    {

    }
}


interface Filter{
    public function filter();
}

class FavoriteFilter implements Filter{
    public function filter()
    {

    }
}

class UnwatchedFilter implements Filter{
    public function filter()
    {

    }
}

class RatingFilter implements Filter{
    public function filter()
    {

    }
}