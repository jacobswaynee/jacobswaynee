/**
 * Use template literals to output HTML
 * @link https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Template_literals
 *
 */


import Backpack  from "./backpack";

const everydayPack = new Backpack (
    "Everyday Backpack",
    30,
    "grey",
    15,
    26,
    26,
    false,
    "December 5, 2018 15:00:00 PST"

);

const content = `    
<main>
<article>
    <h1>${everydayPack.name}</h1>
    <ul>
        <li>Volume${everydayPack.Volume}</li>
        <li>Color${everydayPack.Color}</li>
        <li>Age${everydayPack.backpackAge}</li>
        <li>Number of pockets${everydayPack.pocketNum}</ul>
        <li>Left strap length${everydayPack.strapLength.left}</li>
        <li>Right strap length${everydayPack.strapLength.right}</li>
        <li>Lid status${everydayPack.lidOpen}</li>
    </ul>
</article>
</main>`;

console.log ("everyday backpack :" , everydayPack);
console.log ("everyday backpack:", everydayPack.pocketNum);
console.log ("everyday backpack :", everydayPack.backpackAge());