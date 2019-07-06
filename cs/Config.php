<?php
namespace thoulah\fontawesome\cs;

/**
 * Basic rules.
 */
class Config extends \PhpCsFixer\Config
{
    /**
     * Construct.
     * @param mixed $name
     */
    public function __construct($name = 'mr42-cs-config')
    {
        parent::__construct($name);

        $this->setRiskyAllowed(true);

        $this->setRules([
            'ordered_class_elements' => [
                'sortAlgorithm' => 'alpha',
            ],
        ]);
    }
}
