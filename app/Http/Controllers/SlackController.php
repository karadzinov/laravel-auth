<?php

namespace App\Http\Controllers;


use Spatie\SlashCommand\Request;
use Spatie\SlashCommand\Response;
use Illuminate\Support\Collection;
use Spatie\SlashCommand\Attachment;
use Spatie\SlashCommand\AttachmentField;
use Spatie\SlashCommand\HandlesSlashCommand;

class SlackController extends Controller
{
    public function index(Request $request)
    {
        return $request->text;
    }

}
