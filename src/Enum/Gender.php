<?php

namespace PublicPlan\Enum;

enum Gender: string
{
    case MALE = 'male';
    case FEMALE = 'female';
    case OTHER = 'other';
    case ANONYMOUS = 'anonymous';
}
