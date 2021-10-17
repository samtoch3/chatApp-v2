<?php

namespace App\Entity;

trait Timestamp{
    /**
     * @ORM\Column(type="text")
     */
    private $createdAt;

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * @ORM\PrePersist()
     */
    public function PrePersist(){
        return $this->createdAt = new \DateTime();
    }
}