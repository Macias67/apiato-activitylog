<?php
	
	namespace App\Containers\ActivityLog\Actions;
	
	use Apiato\Core\Foundation\Facades\Apiato;
	use App\Containers\ActivityLog\Tasks\GetMyActivitiesTask;
	use App\Ship\Parents\Actions\Action;
	
	/**
	 * Class GetMyActivitiesAction
	 *
	 * @author  Johannes Schobel <johannes.schobel@googlemail.com>
	 */
	class GetMyActivitiesAction extends Action
	{
		/**
		 * @return mixed
		 */
		public function run()
		{
			$activities = Apiato::call(GetMyActivitiesTask::class);
			
			return $activities;
		}
	}
