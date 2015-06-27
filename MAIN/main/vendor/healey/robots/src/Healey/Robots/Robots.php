<?php namespace Healey\Robots;

class Robots
{
	/**
	 * The lines of for the robots.txt2
	 *
	 * @var array
	 */
	protected $lines = array();

	/**
	 * Generate the robots.txt2 data.
	 *
	 * @return string
	 */
	public function generate()
	{
		return implode(PHP_EOL, $this->lines);
	}

	/**
	 * Add a Sitemap to the robots.txt2.
	 *
	 * @param string $sitemap
	 */
	public function addSitemap($sitemap)
	{
		$this->addLine("Sitemap: $sitemap");
	}

	/**
	 * Add a line to the robots.txt2.
	 *
	 * @param string $line
	 */
	protected function addLine($line)
	{
		$this->lines[] = (string)$line;
	}

	/**
	 * Add a User-agent to the robots.txt2.
	 *
	 * @param string $userAgent
	 */
	public function addUserAgent($userAgent)
	{
		$this->addLine("User-agent: $userAgent");
	}

	/**
	 * Add a Host to the robots.txt2.
	 *
	 * @param string $host
	 */
	public function addHost($host)
	{
		$this->addLine("Host: $host");
	}

	/**
	 * Add a disallow rule to the robots.txt2.
	 *
	 * @param string|array $directories
	 */
	public function addDisallow($directories)
	{
		$this->addRuleLine($directories, 'Disallow');
	}

	/**
	 * Add a rule to the robots.txt2.
	 *
	 * @param string|array $directories
	 * @param string       $rule
	 */
	protected function addRuleLine($directories, $rule)
	{
		foreach ((array)$directories as $directory) {
			$this->addLine("$rule: $directory");
		}
	}

	/**
	 * Add a allow rule to the robots.txt2.
	 *
	 * @param string|array $directories
	 */
	public function addAllow($directories)
	{
		$this->addRuleLine($directories, 'Allow');
	}

	/**
	 * Add a comment to the robots.txt2.
	 *
	 * @param string $comment
	 */
	public function addComment($comment)
	{
		$this->addLine("# $comment");
	}

	/**
	 * Add a spacer to the robots.txt2.
	 */
	public function addSpacer()
	{
		$this->addLine("");
	}

	/**
	 * Reset the lines.
	 *
	 * @return void
	 */
	public function reset()
	{
		$this->lines = array();
	}

	/**
	 * Add multiple lines to the robots.txt2.
	 *
	 * @param string|array $lines
	 */
	protected function addLines($lines)
	{
		foreach ((array)$lines as $line) {
			$this->addLine($line);
		}
	}
}