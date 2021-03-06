<?php $thisPage="Coping with Death";?>

<html>
<?php include("head.php");?>
<body>
	<div id="bodyContainer">
		<?php include("navigation.php");?>
		<div id="contentContainer" class="clearfix">
			<a id="top"></a>
			<div id="TOC">
				<ol>
					<li><a href="#Issue">Issue</a></li>
					<li><a href="#Essentials">Essentials</a></li>
					<li><a href="#Supplemental">Supplemental</a></li>
					<ol type="a">
						<li><a href="#creatures">Creatures</a></li>
						<li><a href="#orders">Orders</a></li>
						<li><a href="#corpse">Corpse Disposal and Memorials</a></li>
						<li><a href="#environ">Environmental Concerns</a></li>
					</ol>
					<li><a href="#Resources">Resources</a></li>
				</ol>
			</div>
			<div id="guide">
				<div id="probHeader">
					<table>
						<tr>
						<td style="text-align:left;"><img src="images/issue-icon.png" /></td>
						<td style="width: 500px;"><a id="Issue"></a><div id="probHeaderText">Issue</div></td>
						<td style="text-align:right;"><img src="images/issue-icon.png" /></td>
						</tr>
					</table>
				</div>
				
				<p>Something's dead. You've got corpses piling up, a mess of dead goblin invaders at your gates, or a slew of undead running rampant inside your fort. Suddenly, ghosts start haunting your fortress and you run out of bolts and soap. What do you do?</p>
				
				<p><a href="#top">Top</a></p>
				
				<div id="probHeader">
					<table>
						<tr>
						<td style="text-align:left;"><img src="images/essentials-icon.png" /></td>
						<td style="width: 500px;"><a id="Essentials"></a><div id="probHeaderText">Essentials</div></td>
						<td style="text-align:right;"><img src="images/essentials-icon.png" /></td>
						</tr>
					</table>
				</div>
				
				<div id="figure" style="width:400px">
					<a href="http://i.imgur.com/BKVby2k.png" target="_coping"><img src="http://i.imgur.com/BKVby2k.png" alt="A simplified death decision tree" title="Click to enlarge"/></a>
					<p>A simplified death decision tree</p>
				</div>
				<p>The basics are simple:</p>
				<ul>
					<li>Proper stockpiles</li>
					<li>Proper orders</li>
					<li>Proper burial</li>
				</ul>
				<p>These three things can't lead you wrong.</p>
				
				<p><a href="#top">Top</a></p>
				
				<div id="probHeader">
					<table>
						<tr>
						<td style="text-align:left;"><img src="images/supplemental-icon.png" /></td>
						<td style="width: 500px;"><a id="Supplemental"></a><div id="probHeaderText">Supplemental</div></td>
						<td style="text-align:right;"><img src="images/supplemental-icon.png" /></td>
						</tr>
					</table>
				</div>
				
				<h2><a id="creatures"></a>Creatures</h2>
				<p>There are three main creatures types: dwarves, owned animals, and others. Opening the <b>[u]</b>nits menu provides lists of all creatures.
				<div id="figure" style="width: 100%">
					<img src="images/units-screen.png" alt="The [u]nits menu"/>
					<p>The <b>[u]</b>nits menu</p>
				</div>
				<ul>
					<li>Dwarves</li>
					Dwarves appear both under the "Citizens" tab and the "Others" tab. Citizens are self-explanatory. They're the things you control. Others are typically merchants, diplomats, and caravan guards, but dwarven creatures of the night and undead also count. Dwarves either need their remains placed in a coffin or require a memorial slab. Without one or the other, a ghost will eventually spawn, causing !!FUN!!.
			
					<li>Owned Animals</li>
					Owned animals appear under the "Pets/Livestock" tab. Pets, like dwarves, should be properly buried, although memorialization is not necessary as pets cannot spawn ghosts. The rest of your animals need only a refuse stockpile after death. However, unlike wild creatures, if your animals die from anything other than the Butcher's "Slaughter an Animal" task, you cannot harvest bones, meat, or skin from the corpse. This is a current bug as of 0.34.11.
			
					<li>Others</li>
					Anything else that appears under the "Others" tab can be slaughtered or stored as you wish. To butcher corpses, you need to place them in a refuse stockpile. Unless you edit the raws, dwarves can no longer butcher sentient corpses as of 0.34.11, i.e. you can't do anything other than store the corpses of invaders or animal man corpses.
				</ul>
				</p>
			
				<p><a href="#top">Top</a></p>
			
				<h2><a id="orders"></a>Orders</h2>
				<div id="figure" style="width:320px">
					<img src="images/orders-menu.png" alt="The [o]rders menu"/>
					<p>The <b>[o]</b>rders menu</p>
				</div>
				<p>Orders can be used to streamline your death decisions. Access the menu via <b>[o]</b>.</p>
				<ul>
					<li>Dwarves <b>[g]</b>ather/i<b>[g]</b>nore Bodies</li>
					Default option. Dwarves will collect dead bodies and either place them in a corpse stockpile or coffin if available. Turning this off means corpses need to be manually collected via dumping or assignment.
					<li><b>[r]</b>efuse</li>
				</ul>
				<div id="figure" style="width:320px">
					<img src="images/orders-refuse-menu.png" alt="The [o]rders [r]efuse menu"/>
					<p>Refuse orders</p>
				</div>
				<ul>
					<ul>
						<li>Dwarves gather/ignore <b>[r]</b>efuse</li>
						If this is off, nothing gets collected. For various reasons, this is usually a bad idea.
						<li>Dwarves gather/ignore <b>[o]</b>utside refuse</li>
						If there are non-dwarf corpses outside, you'll need to turn this on to collect them. Collecting vermin remains, an option that appears if you gather outside refuse, is a purely stylistic decision.
						<li>Dwarves save/dump other <b>[k]</b></li>
						Deselecting this will automatically designate any non-important remains for dumping. Useful if you have a garbage dump up and running.
						<li>Anything else</li>
						If you have a functioning garbage dump and you don't use some of these objects, it can be helpful to dump those things. 
					</ul>
			
					<li><b>[F]</b>orbid</li>
				</ul>
				<div id="figure" style="width:320px">
					<img src="images/orders-forbid-menu.png" alt="The [o]rders [F]orbid menu"/>
					<p>Forbid orders</p>
				</div>
				<ul>
					Claiming corpses means, on death, a corpse can be collected. Forbidding means the remains are, on death, marked "Forbidden" and your dwarves are unable to collect them. The same applies to items. When setting these, it's important to weigh how little regard your dwarves have for danger. If you aren't carefully using the alert system or drawbridges, claiming death items can cause a mass exodus and execution during a siege. On the other hand, afterward, you have to manually reclaim the items. Tailor this to your play style.
				</ul>
			
				<p><a href="#top">Top</a></p>
			
				<h2><a id="corpse"></a>Corpse Disposal and Memorials</h2>
				<p>There are three main considerations with remains: miasma, unhappy thoughts, and ghosts. With a small amount of planning, none will hinder a functioning fort.</p>
				<p>Remains with any sort of meat generate miasma as they rot. Dwarf remains require a corpse stockpile; all other remains require a refuse stockpile. Combating corpse miasma is just like combating any other source. Place the corpse/refuse stockpile in a secure, aboveground location, use diagonals and doors to prevent miasma flow, or dump remains in magma.</p>
				<p>If a dwarf sees a dead pet, he/she gets unhappy thoughts. Developed forts should have happiness generators of some sort (mist, gardens, engravings, etc.) and are usually not bothered by this. Developing forts may struggle with this, especially if a siege wipes out the pet population. To rectify the influx of sadness, have your Masons build coffins at a Mason's Workshop, build them, and enable pet burial. Or, in proper dwarven fashion, destroy the corpse with magma or an atom-smasher before the dwarves notice.
				<p>Similarly, dwarf corpses generate unhappy thoughts on sight, and will eventually spawn ghosts. Once again, you can create coffins and bury the remains to solve all your problems. As of 0.34.11, it's possible to get unresolvable ghosts, usually after caravans needlessly run toward invaders. dfhack's "tweak fix-ghost" command is incredibly useful in this situations.</p>
				<p>Sometimes, due to the location of the creature at death, corpses are either destroyed or unreachable. If it's not a dwarf, this isn't a cause for concern. If a dwarf corpse is unavailable, it's important to memorialize the dwarf to block ghosts. First, a Mason needs to create slabs at a Mason's Workshop, then an Engraver needs to memorialize the dwarf at a Craftdwarf's Workshop, and finally the engraved slab needs to be built. It's possible to memorialize anything in the "Dead/Missing" tab under the <b>[u]</b>nits menu, but it's only necessary for dwarves.</p>
				<p>Ignore these tips for !!FUN!!. Advanced forts usually don't need to worry about burial. The amount of !!FUN!! related to ghosts debatably increases exponentially as the number of ghosts increases, if you're lucky.</p>
			
				<p><a href="#top">Top</a></p>
			
				<h2><a id="environ"></a>Environmental Concerns</h2>
				<p>If you've embarked in an evil zone or near a necromancer's tower (in the "Neighbors" tab at embark), almost all of this information is no longer useful. Both can cause corpse reanimation, although necromancers are easier to handle than zone-wide resurrection.</p>
				<div id="figure" style="width:300px;">
					<img src="images/evil-and-necromancers.png" alt="Evil Zones and Necromancers" />
					<p>Evil Zones and Necromancers</p>
				</div>
				<p>Evil zones have the potential to reanimate almost any remains. Corpses, skeletons, skins, body parts, and so on will resurrect almost immediately and hunt down nearby dwarves. Cause of death doesn't matter, so a meat industry is generally out of the question. Parts will reanimate in the butcher's shop, scaring the butcher and causing unhappy thoughts to all nearby. However, not every evil zone does this. If you want to embark in an evil zone, you have two choices. You can save on start, kill a creature, then abandon if the zone reanimates or restart if it doesn't. The easier option, which also provides a more diverse fort, is to embark with non-evil area, place workshops and remains on non-evil tiles, and do your best to not kill anything on the evil tiles.</p>
				<p>Necromancers are easier to cope with. They're also one of the simplest sources of !!FUN!! in the game. Instead of zone-width reanimation, necromancers require line-of-sight on remains. They will reanimate the same types of remains, although re-reanimation of certain objects and reanimation from multiples sources are (currently) unresearched. Line-of-sight for necromancers is longer than for a typical dwarf, so open fort designs aren't recommended.</p>
				<p>In either case, it's important to section off anything that comes into contact with remains. Right after embark, it's essential to either build or dig some way to seal yourself off from the outside. Airlocks lined with traps can prevent unseen necromancer invasion. Corpse storage should ideally be a magma pit, but anything that has no access to the rest of the fort is all that's necessary, be it a pit or a locked room. Water doesn't affect the undead, so dumping remains in a moat or drowning chamber can create more dangers than normal. Butchery and tanning can be difficult. The main concern is damage control, so building those workshops in lockable rooms is all that's truly necessary. Good fort design can prevent most !!FUN!! from reanimation.</p>
				
				<p><a href="#top">Top</a></p>
				
				<div id="probHeader">
					<table>
						<tr>
						<td style="text-align:left;"><img src="images/resources-icon.png" /></td>
						<td style="width: 500px;"><a id="Resources"></a><div id="probHeaderText">Resources</div></td>
						<td style="text-align:right;"><img src="images/resources-icon.png" /></td>
						</tr>
					</table>
				</div>
				
				<ul>
					<li><a href="http://dwarffortresswiki.org/index.php/Necromancer" target="_blank">Necromancers at the DF Wiki</a></li>
					<li><a href="http://dwarffortresswiki.org/index.php/Ghost" target="_blank">Ghosts at the DF Wiki</a></li>
				</ul>
				<p><a href="#top">Top</a></p>
			</div>
		</div>
		<?php include("footer.php");?>
	</div>
</body>
</html>