<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\project as Project;

class includedinproject extends Notification implements ShouldQueue
{
    use Queueable;

    protected $project;

    public function __construct(Project $project)
    {
        //dd($project);
        $this->project = $project;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        return [
            'project_id' => $this->project->id,
            'project_title' => $this->project->project_title,
        ];
    }
}