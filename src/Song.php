<?php

namespace FHeerdink\Song;

class Song
{
	protected $lyrics;

	public function __get($lyric) : Song
	{
		$this->lyrics[] = $lyric;

		return $this;
	}

	public function play()
	{
		$output = '';
		if(!empty($this->lyrics)) {
			foreach ($this->lyrics as $lyric) {
				$output .= $lyric . ' ';
			}
		}
		print trim($output);
	}
}