<?php
/**
 * game, the game that is available
 *
 * game is on store to read, review buy
 *
 * @author Francisco Garcia <fgarcia132@cnm.edu>
 **/
class Game {
	/**
	 * id for the Game; this is the primary key
	 * @var int $gameId
	 **/
	private $gameId;
	/**
	 * the game name
	 * @var int $gameName
	 **/
	private $gameName;
	/**
	 * review for the game
	 * @var int $review
	 */
	private $review;
	/**
	 * getting game info for user to read
	 */
	public function getGameId($gameId) {
		return $this->gameId;
	}
	public function setGameId($newGameId) {
		$newGameId = filter_var($newGameId, FILTER_VALIDATE_INT);
	}
	public function getGameName($gameName) {
		return $this->gameName;
	}
	public function setGameName($newGameNameId) {
		$newGameNameId = filter_var($newGameNameId, FILTER_VALIDATE_INT);
	}
	public function getReview($review) {
		return $this->review;
	}
	public function setReview($newReviewId) {
		$newReviewId = filter_var($newReviewId, FILTER_VALIDATE_INT);
	}
}
