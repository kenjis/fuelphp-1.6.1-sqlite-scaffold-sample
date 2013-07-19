<?php
class Controller_Bbs extends Controller_Template{

	public function action_index()
	{
		$data['bbs'] = Model_Bbs::find('all');
		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/index', $data);

	}

	public function action_view($id = null)
	{
		is_null($id) and Response::redirect('bbs');

		if ( ! $data['bbs'] = Model_Bbs::find($id))
		{
			Session::set_flash('error', 'Could not find bbs #'.$id);
			Response::redirect('bbs');
		}

		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/view', $data);

	}

	public function action_create()
	{
		if (Input::method() == 'POST')
		{
			$val = Model_Bbs::validate('create');
			
			if ($val->run())
			{
				$bbs = Model_Bbs::forge(array(
					'post_date' => Input::post('post_date'),
					'message' => Input::post('message'),
				));

				if ($bbs and $bbs->save())
				{
					Session::set_flash('success', 'Added bbs #'.$bbs->id.'.');

					Response::redirect('bbs');
				}

				else
				{
					Session::set_flash('error', 'Could not save bbs.');
				}
			}
			else
			{
				Session::set_flash('error', $val->error());
			}
		}

		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/create');

	}

	public function action_edit($id = null)
	{
		is_null($id) and Response::redirect('bbs');

		if ( ! $bbs = Model_Bbs::find($id))
		{
			Session::set_flash('error', 'Could not find bbs #'.$id);
			Response::redirect('bbs');
		}

		$val = Model_Bbs::validate('edit');

		if ($val->run())
		{
			$bbs->post_date = Input::post('post_date');
			$bbs->message = Input::post('message');

			if ($bbs->save())
			{
				Session::set_flash('success', 'Updated bbs #' . $id);

				Response::redirect('bbs');
			}

			else
			{
				Session::set_flash('error', 'Could not update bbs #' . $id);
			}
		}

		else
		{
			if (Input::method() == 'POST')
			{
				$bbs->post_date = $val->validated('post_date');
				$bbs->message = $val->validated('message');

				Session::set_flash('error', $val->error());
			}

			$this->template->set_global('bbs', $bbs, false);
		}

		$this->template->title = "Bbs";
		$this->template->content = View::forge('bbs/edit');

	}

	public function action_delete($id = null)
	{
		is_null($id) and Response::redirect('bbs');

		if ($bbs = Model_Bbs::find($id))
		{
			$bbs->delete();

			Session::set_flash('success', 'Deleted bbs #'.$id);
		}

		else
		{
			Session::set_flash('error', 'Could not delete bbs #'.$id);
		}

		Response::redirect('bbs');

	}


}
