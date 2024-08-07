Setup:
1. Laravel Install > composer create-project laravel/laravel personal-protfolio
2. (.evn>dataBase connection)
3. model and migration create > php artisan make:model Project -ms
4. DataBase_Table Create:-
```d
Schema::create('settings', function (Blueprint $table) {

            $table->id();

            $table->string("username")->nullable();

            $table->string("name")->nullable();

            $table->string("title")->nullable();

            $table->string("linkedin_url")->nullable();

            $table->string("github_url")->nullable();

            $table->string("insta_url")->nullable();

            $table->string("hero_gift")->nullable();

            $table->string("email")->nullable();

            $table->string("phone")->nullable();

            $table->string("pronouns")->nullable();

            $table->string("location")->nullable();

            $table->string("languages")->nullable();

            $table->string("pit_animal")->nullable();

            $table->timestamps();

        });
```

```d
Schema::create('projects', function (Blueprint $table) {

            $table->id();

            $table->string("title")->nullable();

            $table->string("image")->nullable();

            $table->string("url")->nullable();

            $table->string("keywords")->nullable();

            $table->string("descriptions")->nullable();

            $table->timestamps();

        });
```

```d
Schema::create('tech_stacks', function (Blueprint $table) {

            $table->id();

            $table->string("name");

            $table->string("url")->nullable();

            $table->string("image");

            $table->timestamps();

        });
```

```d
Schema::create('abouts', function (Blueprint $table) {

            $table->id();

            $table->string("pronouns")->nullable();

            $table->string("location")->nullable();

            $table->string("languages")->nullable();

            $table->string("pit_animal")->nullable();

            $table->boolean("have_education")->default(true);

            $table->string("education_degree")->nullable();

            $table->string("education_location")->nullable();

            $table->string("education_achievements")->nullable();

            $table->timestamps();

        });
```

```d
Schema::create('experiences', function (Blueprint $table) {

            $table->id();

            $table->string("role");

            $table->string("start_date");

            $table->string("start_date");

            $table->string("company")->nullable();

            $table->string("company_url")->nullable();

            $table->enum("job_type",["remote","onsite"]);

            $table->timestamps();

        });
```

```d
Schema::create('experience_tasks', function (Blueprint $table) {

            $table->id();

            $table->string("title");

            $table->string("description");
            
            $table->foreignId('experience_id')->constrained()->cascadeOnDelete();

            $table->timestamps();

        });
```

```d
Schema::create('education', function (Blueprint $table) {

            $table->id();

            $table->string("education_degree")->nullable();

            $table->string("education_location")->nullable();

            $table->longText("education_achievements")->nullable();

            $table->timestamps();

        });
```

5. Model Protected fillable:-
6. and relationship build:-
```d
class Education extends Model

{
    use HasFactory;

    protected $fillable=[

        'education_degree',

        'education_location',

        'education_achievements'

    ];

}```

```d
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Experience extends Model

{
    use HasFactory;

    protected $fillable=[

        "role",

        "start_date",

        "start_date",

        "company",

        "company_url",

        "job_type"

    ];

  

    /**

     * Get all of the tasks for the Experience

     *

     * @return \Illuminate\Database\Eloquent\Relations\HasMany

     */

    public function tasks(): HasMany

    {

        return $this->hasMany(ExperienceTask::class);

    }

}
```

```d
<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
class ExperienceTask extends Model

{
    use HasFactory;
    protected $fillable=[

        "title",

        "description",

        "experience_id"

    ];

    /**

     * Get the Experience that owns the ExperienceTask

     *

     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo

     */

    public function Experience(): BelongsTo

    {

        return $this->belongsTo(Experience::class);

    }

}
```

```d
class Image extends Model

{

    use HasFactory;

    protected $fillable=[

        "image",

        "url",

        "title",

    ];

}
```

```d
class Project extends Model

{

    use HasFactory;

    protected $fillable=[

        "title",

        "image",

        "url",

        "keywords",

        "descriptions"

    ];

}
```

```d
class Setting extends Model

{

    use HasFactory;

    protected $fillable=[

        "username",

        "name",

        "title",

        "linkedin_url",

        "github_url",

        "github_url",

        "insta_url",

        "hero_gift",

        "email",

        "phone",

        "pronouns",

        "location",

        "languages",

        "pit_animal"

    ];

}
```

```d
class TechStack extends Model

{

    use HasFactory;

    protected $fillable=[

        "name",

        "url",

        "image",

    ];

}
```