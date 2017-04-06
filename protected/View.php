<?php

/**
 * Class View
 *
 * @property array $articles
 */
class View
    implements Countable, Iterator
{


    use MagicTrait;

    public function count()
    {
        return count($this->data);
    }

    public function render($template)
    {
        ob_start();
        foreach ($this as $key => $val)
        {
            $$key = $val;
        }
        include $template;
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }

    public function display($template)
    {
        echo $this->render($template);
    }

    public function current()
    {
        return current($this->data);
    }

    public function next()
    {
        next($this->data);
    }

    public function key()
    {
        return key($this->data);
    }

    public function valid()
    {
        return null !== key($this->data);
    }

    public function rewind()
    {
        reset($this->data);
    }

}