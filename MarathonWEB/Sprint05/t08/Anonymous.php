<?php

function get_anonymous($name, $alias, $affiliation)
{
    return new class($name, $alias, $affiliation) {
        private $name;
        private $alias;
        private $affiliation;

        /**
         *  constructor.
         * @param $name
         * @param $alias
         * @param $affiliation
         */
        public function __construct($name, $alias, $affiliation)
        {
            $this->name = $name;
            $this->alias = $alias;
            $this->affiliation = $affiliation;
        }

        /**
         * @return mixed
         */
        public function getName()
        {
            return $this->name;
        }

        /**
         * @param mixed $name
         */
        public function setName($name): void
        {
            $this->name = $name;
        }

        /**
         * @return mixed
         */
        public function getAlias()
        {
            return $this->alias;
        }

        /**
         * @param mixed $alias
         */
        public function setAlias($alias): void
        {
            $this->alias = $alias;
        }

        /**
         * @return mixed
         */
        public function getAffiliation()
        {
            return $this->affiliation;
        }

        /**
         * @param mixed $affiliation
         */
        public function setAffiliation($affiliation): void
        {
            $this->affiliation = $affiliation;
        }


    };
}
