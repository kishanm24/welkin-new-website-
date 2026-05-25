# Welkin Technohub — Meta Ads Campaign Reference

## Account Setup
| Field | Value |
|---|---|
| Business | Welkin Technohub PVT.LTD |
| Website | welkinhub.in / welkintechnohub.com |
| Pixel Name | Welkin Website Pixel |
| Pixel ID | 1701907194169092 |
| Target Country | United States only |
| Objective | Leads |
| Conversion Event | Lead |

---

## Campaign 1 — Cold Audience (Main)

**Campaign Settings**
| Field | Value |
|---|---|
| Name | `META_Leads_ColdUS_WebDev_May26` |
| Objective | Leads |
| Buying Type | Auction |
| Daily Budget | $15/day |
| Advantage Campaign Budget | On |
| Schedule | Run all the time |
| Start Date | Today |
| End Date | None |
| Time Zone | US Eastern (GMT-5) |

---

### Ad Set 1 — Small Business Owners

**Ad Set Settings**
| Field | Value |
|---|---|
| Name | `AdSet_SmallBizOwners_USA` |
| Conversion Location | Website |
| Pixel | Welkin Website Pixel |
| Conversion Event | Lead |
| Location | United States |
| Age | 30–50 |
| Gender | All |
| Language | English |
| Advantage Detailed Targeting | OFF |

**Interests / Behaviors**
- Small Business Owners (Behavior)
- Shopify
- WooCommerce
- WordPress.com
- Business Decision Makers (Behavior)

**Placements (Manual)**
- Facebook Feed
- Instagram Feed
- Instagram Stories
- Facebook Stories
- Uncheck: Audience Network, Messenger

**Ads inside Ad Set 1:**

#### Ad 1 — Angle 1 "Too Expensive"
| Field | Value |
|---|---|
| Ad Name | `Ad_Angle1_TooExpensive` |
| Format | Single Image |
| Image | Angle 1 image (1080x1080) |
| Primary Text | US agencies charge a premium. We deliver the same quality — at a fraction of the cost. See our work first. |
| Headline | Your custom website doesn't have to cost $10,000 |
| Description | Web Dev · App Dev · UI/UX · QA — All in one team |
| CTA | Learn More |
| URL | https://welkinhub.in |

#### Ad 2 — Angle 3 "DIY Isn't Working"
| Field | Value |
|---|---|
| Ad Name | `Ad_Angle3_DIYNotWorking` |
| Format | Single Image |
| Image | Angle 3 image (1080x1080) |
| Primary Text | Wix isn't going to grow your business. We build custom — so you stand out and convert. |
| Headline | Stop Wasting Weekends on Wix |
| Description | Custom Web & App Development — starting affordable |
| CTA | Learn More |
| URL | https://welkinhub.in |

---

### Ad Set 2 — Startup Founders

**Ad Set Settings**
| Field | Value |
|---|---|
| Name | `AdSet_StartupFounders_USA` |
| Same tracking | Welkin Pixel + Lead event |
| Location | United States |
| Age | 30–50 |
| Advantage Detailed Targeting | OFF |

**Interests / Job Titles**
- Founder, Co-Founder, CEO, CTO (Job Titles)
- Startups
- SaaS
- Product Management

**Ads inside Ad Set 2:**

#### Ad 1 — Angle 1 "Too Expensive" (same as above)

#### Ad 2 — Angle 4 "Everything Included"
| Field | Value |
|---|---|
| Ad Name | `Ad_Angle4_EverythingIncluded` |
| Format | Single Image |
| Image | Angle 4 image (1080x1080) |
| Primary Text | No juggling freelancers. No scope creep. Just a dedicated team that ships. |
| Headline | Design. Dev. QA. All in one team. |
| Description | Get a free quote — no commitment |
| CTA | Get Quote |
| URL | https://welkinhub.in |

---

## Campaign 2 — Retargeting

**Campaign Settings**
| Field | Value |
|---|---|
| Name | `META_Leads_Retarget_FreeMockup_May26` |
| Objective | Leads |
| Buying Type | Auction |
| Daily Budget | $5/day |
| Schedule | Start 7 days after Campaign 1 |

### Ad Set — Website Visitors

**Custom Audience**
- Name: `WelkinHub_Visitors_30D`
- Type: Website visitors
- Window: Last 30 days
- Exclusion: People who already fired Lead event

**Ad — Angle 5 "See Design Before You Pay"**
| Field | Value |
|---|---|
| Ad Name | `Ad_Angle5_FreeDesignRetarget` |
| Format | Single Image |
| Image | Angle 5 image (1080x1080) |
| Primary Text | You visited us. We want to earn your trust. See a free mockup of your site before you sign anything. |
| Headline | We'll design your homepage — before you commit |
| Description | No risk. No payment. Just results. |
| CTA | Learn More |
| URL | https://welkinhub.in |

---

## Budget Summary

| Campaign | Daily Budget | Monthly Est. |
|---|---|---|
| Campaign 1 — Cold | $15/day | ~$450 |
| Campaign 2 — Retarget | $5/day | ~$150 |
| **Total** | **$20/day** | **~$600** |

---

## Image Specs

All images should be **1080x1080px (square)** for both Facebook and Instagram compatibility.

| Angle | File | Placement |
|---|---|---|
| Angle 1 — Too Expensive | angle1-too-expensive.jpg | Ad Set 1 + Ad Set 2 |
| Angle 3 — DIY Isn't Working | angle3-diy-not-working.jpg | Ad Set 1 |
| Angle 4 — Everything Included | angle4-everything-included.jpg | Ad Set 2 |
| Angle 5 — Free Mockup (Retarget) | angle5-free-mockup.jpg | Campaign 2 |

---

## Key Settings Checklist

- [ ] Authentication verified (Start authentication — error #3858385)
- [ ] Pixel firing correctly (green dot in Ads Manager)
- [ ] Lead conversion event set on contact form thank-you page
- [ ] US Virgin Islands + US Minor Outlying Islands removed from location
- [ ] Advantage Detailed Targeting turned OFF
- [ ] Multi-advertiser ads unchecked
- [ ] Description empty for Stories placements
- [ ] Campaign 1 live
- [ ] Campaign 2 live (start 7 days after Campaign 1)

---

## What to Watch (After Launch)

Check after Day 7 — do NOT change anything before that.

| Metric | Good | Bad |
|---|---|---|
| CTR | Above 1% | Below 0.5% |
| CPM | $15–35 | Above $50 |
| CPC | Under $2.50 | Above $5 |
| Leads | 1–2 per week | Zero after 14 days |

After 14 days — pause the lowest CTR ad and put budget into the winner.

---

## Notes
- Learning Phase: 1–2 weeks — do not make changes during this time
- Meta needs 50 Lead events/week to exit learning phase
- Retargeting audience (Campaign 2) needs 7 days of pixel data before launching
- US audience is most active: 7–9am, 12–2pm, 8–11pm Eastern Time
