<?php
namespace Jumbo\Jumbo\Domain\Model;

/**
 * Content
 */
class Jumbotron extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
    /**
     * type
     *
     * @var int
     */
    protected $type = 0;

    /**
     * column
     *
     * @var int
     */
    protected $column = 0;

    /**
     * header
     *
     * @var string
     */
    protected $header = '';

    /**
     * subheade
     *
     * @var string
     */
    protected $subheade = '';

    /**
     * text
     *
     * @var string
     */
    protected $text = '';

    /**
     * buttonUrl
     *
     * @var string
     */
    protected $buttonUrl = '';

    /**
     * buttonText
     *
     * @var string
     */
    protected $buttonText = '';

    /**
     * Returns the type
     *
     * @return int $type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Sets the type
     *
     * @param int $type
     * @return void
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * Returns the column
     *
     * @return int $column
     */
    public function getColumn()
    {
        return $this->column;
    }

    /**
     * Sets the column
     *
     * @param int $column
     * @return void
     */
    public function setColumn($column)
    {
        $this->column = $column;
    }

    /**
     * Returns the header
     *
     * @return string $header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets the header
     *
     * @param string $header
     * @return void
     */
    public function setHeader($header)
    {
        $this->header = $header;
    }

    /**
     * Returns the subheade
     *
     * @return string $subheade
     */
    public function getSubheade()
    {
        return $this->subheade;
    }

    /**
     * Sets the subheade
     *
     * @param string $subheade
     * @return void
     */
    public function setSubheade($subheade)
    {
        $this->subheade = $subheade;
    }

    /**
     * Returns the text
     *
     * @return string $text
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets the text
     *
     * @param string $text
     * @return void
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * Returns the buttonUrl
     *
     * @return string $buttonUrl
     */
    public function getButtonUrl()
    {
        return $this->buttonUrl;
    }

    /**
     * Sets the buttonUrl
     *
     * @param string $buttonUrl
     * @return void
     */
    public function setButtonUrl($buttonUrl)
    {
        $this->buttonUrl = $buttonUrl;
    }

    /**
     * Returns the buttonText
     *
     * @return string $buttonText
     */
    public function getButtonText()
    {
        return $this->buttonText;
    }

    /**
     * Sets the buttonText
     *
     * @param string $buttonText
     * @return void
     */
    public function setButtonText($buttonText)
    {
        $this->buttonText = $buttonText;
    }
}
