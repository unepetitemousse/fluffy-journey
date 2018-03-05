<?php
/**
 * Advanced test
 *
 * Goal:
 *  - Show your understanding of written English
 *  - Object Oriented Programing, and inheritance
 *
 * In order to succeed:
 *  - Sort issue with Wolf class, a wolf may have no name, indeed.
 *  - Fix the loop, there may be unexpected content (bonus if you can ignore the error)
 *  - Use proper CSS class on each table row
 *  - Display the Subject name in the loop
 *
 * Bonus:
 *  - You can name a human by his first and last name, see:
 * https://randomuser.me/documentation#howto
 * -
 */

  interface LifeForm
  {
    const ADN = true;

    function getLifeExpectancy();

    function getName();
  }

  /**
   * Class Human
   *
   * A very complex yet very functional class that uses a webservice in order to provide randomized content.
   *
   * You should not bother much about this class.
   */
  class Human implements LifeForm
  {
    /** @var object User representation as returned by RandomUser.me */
    private $user;

    function __construct()
    {
      $this->user = json_decode(file_get_contents('https://randomuser.me/api/'), JSON_FORCE_OBJECT);
    }

    function getLifeExpectancy()
    {
      return rand(50, 104);
    }

    function getName()
    {
      return @$this->user['results'][0]['name']['first'];
    }
  }

  /**
   * Class Wolf
   *
   * A Wolf is a wild form of life, and its definition may not match PHP processor expectation.
   *
   * I'd double check this class, if I were you.
   */
  class Wolf implements LifeForm
  {
    function getLifeExpectancy()
    {
      return rand(3, 8);
    }
  }

  /**
   * Class Dog
   *
   * Some kind of domestic variant of a canine lifeform, that have a name randomized from the content of a very
   * short array.
   */
  class Dog extends Wolf
  {
    function __construct()
    {
      $names = [
        'Medor', 'Doggy', 'Fluffy', 'Albert', 'Ruppert', 'Felix'
      ];

      $this->name = $names[array_rand($names)];
    }

    function getLifeExpectancy()
    {
      return rand(5, 13);
    }

    function getName()
    {
      return $this->name;
    }
  }

  /** @var LifeForm[] $subjects */
  $subjects = [
    new Dog(),
    new Dog(),
    new Dog(),
    new Human(),
    new Dog(),
    new Dog(),
    new Human(),
    new Wolf(),
    new Human(),
    new stdClass(),
    new Human(),
  ];
?>
<html>
<head>
  <style>
    .subject {
      background-color: darkgray;
    }

    .Dog {
      background-color: lightblue;
    }

    .Wolf {
      background-color: lightpink;
    }

    .Human {
      background-color: lightgreen;
    }
  </style>
</head>
  <body>
    <h1>Advanced test</h1>
    <h2>Goal</h2>
    <ul>
      <li>Show your understanding of written English</li>
      <li>Object Oriented Programing, and inheritance</li>
    </ul>

    <h2>In order to succeed</h2>
    <ul>
      <li>Sort issue with Wolf class, a wolf may have no name, indeed.</li>
      <li>Fix the loop, there may be unexpected content (bonus if you can ignore the error)</li>
      <li>Use proper CSS class on each table row</li>
      <li>Display the Subject name in the loop</li>
    </ul>

    <table>
      <thead>
        <th>Type</th>
        <th>Name</th>
        <th>Life Expectancy</th>
      </thead>
      <tbody>
        <?php foreach($subjects as $subject): ?>
          <tr class="subject">
            <td><?php echo get_class($subject); ?></td>
            <td><!-- Oops, someone forgot to insert the NAME value. --></td>
            <td><?php echo $subject->getLifeExpectancy(); ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </body>
</html>