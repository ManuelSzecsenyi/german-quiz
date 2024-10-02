<?php

namespace App\Enums;

enum QuestionType: string
{
    case MULTIPLE_CHOICE = "MultipleChoice";
    case LISTENING = "Listening";
    case MATCHING = "Matching";
}
