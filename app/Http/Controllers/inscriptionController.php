<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Requests\CreateinscriptionRequest;
use Illuminate\Http\Request;
use App\Libraries\Repositories\inscriptionRepository;
use Mitul\Controller\AppBaseController;
use Response;
use Flash;
use DB;
use Mail;
class inscriptionController extends AppBaseController
{

	/** @var  inscriptionRepository */
	private $inscriptionRepository;

	function __construct(inscriptionRepository $inscriptionRepo)
	{
		$this->inscriptionRepository = $inscriptionRepo;
		$this->middleware('auth',['except' => ['create','store']]);
	}

	/**
	 * Display a listing of the inscription.
	 *
	 * @param Request $request
	 *
	 * @return Response
	 */
	public function index(Request $request)
	{
	    $input = $request->all();

		$result = $this->inscriptionRepository->search($input);

		$inscriptions = $result[0];

		$attributes = $result[1];
		$nbr = DB::table('inscriptions')->count();
		//echo "string";

		return view('inscriptions.index')
		    ->with('inscriptions', $inscriptions)
		    ->with('attributes', $attributes)
		    ->with('nbr', $nbr);
	}

	/**
	 * Show the form for creating a new inscription.
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('inscriptions.create');
	}

	/**
	 * Store a newly created inscription in storage.
	 *
	 * @param CreateinscriptionRequest $request
	 *
	 * @return Response
	 */
	public function store(CreateinscriptionRequest $request)
	{
        $input = $request->all();

		$inscription = $this->inscriptionRepository->store($input);
		$nbr = DB::table('inscriptions')->count();
		if($nbr%7==0){
               // send email                
				$email="belaidzouhair@gmail.com";
				Mail::send('emails.contact', ['email' => $email,'nbr' =>$nbr], function($message) use ($email,$nbr)
				{
					$message->to($email)->subject('workshop nbr: '.$nbr);
				});
           }

		Flash::message('inscription saved successfully.');
		return view('inscriptions.merci')->with('inscription', $inscription);
	}

	/**
	 * Display the specified inscription.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function show($id)
	{
		$inscription = $this->inscriptionRepository->findinscriptionById($id);

		if(empty($inscription))
		{
			Flash::error('inscription not found');
			return redirect(route('inscriptions.index'));
		}

		return view('inscriptions.show')->with('inscription', $inscription);
	}

	/**
	 * Show the form for editing the specified inscription.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$inscription = $this->inscriptionRepository->findinscriptionById($id);

		if(empty($inscription))
		{
			Flash::error('inscription not found');
			return redirect(route('inscriptions.index'));
		}

		return view('inscriptions.edit')->with('inscription', $inscription);
	}

	/**
	 * Update the specified inscription in storage.
	 *
	 * @param  int    $id
	 * @param CreateinscriptionRequest $request
	 *
	 * @return Response
	 */
	public function update($id, CreateinscriptionRequest $request)
	{
		$inscription = $this->inscriptionRepository->findinscriptionById($id);

		if(empty($inscription))
		{
			Flash::error('inscription not found');
			return redirect(route('inscriptions.index'));
		}

		$inscription = $this->inscriptionRepository->update($inscription, $request->all());

		Flash::message('inscription updated successfully.');

		return redirect(route('inscriptions.index'));
	}

	/**
	 * Remove the specified inscription from storage.
	 *
	 * @param  int $id
	 *
	 * @return Response
	 */
	public function destroy($id)
	{
		$inscription = $this->inscriptionRepository->findinscriptionById($id);

		if(empty($inscription))
		{
			Flash::error('inscription not found');
			return redirect(route('inscriptions.index'));
		}

		$inscription->delete();

		Flash::message('inscription deleted successfully.');

		return redirect(route('inscriptions.index'));
	}

}
