<?php

namespace TaskListBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Task
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\HasLifecycleCallbacks()
 */
class Task
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="due", type="datetime")
     */
    private $due;

    /**
     * @var boolean
     *
     * @ORM\Column(name="completed", type="boolean")
     */
    private $completed;

    /**
     * @var boolean
     *
     * @ORM\Column(name="deleted", type="boolean")
     */
    private $deleted;
    
    /** @ORM\ManyToOne(targetEntity="TaskList", inversedBy="tasks") */
    private $taskList;
    
    /** @ORM\Column(type="datetime", nullable=true) */
    private $dateCompleted;
    
    /** @ORM\Column(type="datetime", nullable=true) */
    private $dateDeleted;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Task
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Task
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set due
     *
     * @param \DateTime $due
     *
     * @return Task
     */
    public function setDue($due)
    {
        $this->due = $due;

        return $this;
    }

    /**
     * Get due
     *
     * @return \DateTime
     */
    public function getDue()
    {
        return $this->due;
    }

    /**
     * Set completed
     *
     * @param boolean $completed
     *
     * @return Task
     */
    public function setCompleted($completed)
    {
        $this->completed = $completed;

        return $this;
    }

    /**
     * Get completed
     *
     * @return boolean
     */
    public function getCompleted()
    {
        return $this->completed;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Task
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * Set taskList
     *
     * @param \TaskListBundle\Entity\TaskList $taskList
     *
     * @return Task
     */
    public function setTaskList(\TaskListBundle\Entity\TaskList $taskList = null)
    {
        $this->taskList = $taskList;

        return $this;
    }

    /**
     * Get taskList
     *
     * @return \TaskListBundle\Entity\TaskList
     */
    public function getTaskList()
    {
        return $this->taskList;
    }

    /**
     * Set dateCompleted
     *
     * @param \DateTime $dateCompleted
     *
     * @return Task
     */
    public function setDateCompleted($dateCompleted)
    {
        $this->dateCompleted = $dateCompleted;

        return $this;
    }

    /**
     * Get dateCompleted
     *
     * @return \DateTime
     */
    public function getDateCompleted()
    {
        return $this->dateCompleted;
    }

    /**
     * Set dateDeleted
     *
     * @param \DateTime $dateDeleted
     *
     * @return Task
     */
    public function setDateDeleted($dateDeleted)
    {
        $this->dateDeleted = $dateDeleted;

        return $this;
    }

    /**
     * Get dateDeleted
     *
     * @return \DateTime
     */
    public function getDateDeleted()
    {
        return $this->dateDeleted;
    }
    
    /** @ORM\PreUpdate */
    public function updateDateCompleted()
    {
        if ($this->completed) {
           $this->dateCompleted = new \DateTime();
        }
    }
    
    /** @ORM\PreUpdate */
    public function updateDateDeleted()
    {
        if ($this->deleted) {
           $this->dateDeleted = new \DateTime();
        }
    }
}
