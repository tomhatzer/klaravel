<?php

namespace App\Http\Controllers;

use Ksoft\Klaravel\Traits\ResponsesTrait;
use Ksoft\Klaravel\Traits\KrudControllerTrait;

class BaseKrudController extends Controller
{
    use ResponsesTrait, KrudControllerTrait;

    /**
     * @var ModelRespository
     */
    protected $repo;

    /**
     * @var ModelCreateIteracion
     */
    protected $createInteraction;

    /**
     * @var ModelUpdateInteraction
     */
    protected $updateInteraction;

}


/**
 *  this are the params refrences to match the generated in the Controller.
 *  Adjust to your needs once generated.
 */


 /**
  *   @SWG\Parameter(parameter="id_in_path", name="id", description="Record's ID", type="integer", required=true,in="path"),
  *   @SWG\Parameter(parameter="sort", name="sort", description="To sort desc need to put the character - before the field.", type="string", required=false, in="query"),
  *   @SWG\Parameter(parameter="columns", name="columns", description="To limit columns", type="string", required=false, in="query"),
  *   @SWG\Parameter(parameter="take", name="take", default="10", description="Number of records per page, 0 will return all records", type="integer", required=false, in="query"),
  *   @SWG\Parameter(parameter="page", name="page", default="1", description="Page number to show.", type="integer", required=false, in="query"),
 */

/**
 *  @SWG\Definition(definition="ValidationError",
 *      @SWG\Property(property="field_name", type="array", @SWG\Items(type="string", example="This field its required"))
 *  )
 */

/**
 *   @SWG\Response(
 *      response="ValidationResponse",
 *      description="Validation errors",
 *      @SWG\Schema(
 *        @SWG\Property(property="success", type="boolean", default=false),
 *        @SWG\Property(property="errors", ref="#/definitions/ValidationError"),
 *        @SWG\Property(property="status_code", type="integer", format="int32", example=422)
 *        )
 *    )
 */

/**
 *   @SWG\Response(
 *      response="PaginationResponse",
 *      description="Validation errors",
 *      @SWG\Schema(
 *          @SWG\Property(property="current_page", type="integer", format="int32"),
 *          @SWG\Property(property="data"),
 *          @SWG\Property(property="first_page_url", type="string"),
 *          @SWG\Property(property="from", type="integer", format="int32"),
 *          @SWG\Property(property="last_page", type="integer", format="int32"),
 *          @SWG\Property(property="last_page_url", type="string"),
 *          @SWG\Property(property="next_page_url", type="string"),
 *          @SWG\Property(property="path", type="string"),
 *          @SWG\Property(property="per_page", type="string"),
 *          @SWG\Property(property="prev_page_url", type="string"),
 *          @SWG\Property(property="to", type="integer", format="int32"),
 *          @SWG\Property(property="total", type="integer", format="int32"),
 *        )
 *    )
 */

 /**
  * @SWG\Response(
  *      response="JsonResponse",
  *      description="Default response",
  *      @SWG\Schema(
  *        @SWG\Property(property="success", type="boolean", default=true),
  *        @SWG\Property(property="data"),
  *        @SWG\Property(property="status_code", type="integer", format="int32", example=200)
  *      )
  * )
 */
